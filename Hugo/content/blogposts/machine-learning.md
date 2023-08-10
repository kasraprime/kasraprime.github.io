+++
title = "Machine Learning"
author = "Kasra Darvish"
date = 2023-08-08
draft = true
+++

## Teaching {#teaching}

Whenever you want to explain machine learning to someone, use the example of [Teaching]({{< relref "teaching" >}}).
Machine learning is like taking an exam from students. You compare students' results (model's prediction) with the answers (labels) you have.


## Resources {#resources}

1.  <https://course19.fast.ai/videos/?lesson=1>
2.  <https://wandb.ai/aarora/weekly%5C_digest/reports/This-Week-in-Research-Papers--Vmlldzo2MTA1MDg?galleryTag=digests>


### Generative vs Discriminative models {#generative-vs-discriminative-models}

<https://stats.stackexchange.com/questions/12421/generative-vs-discriminative>

Generative models provide a model of how the data is actually generated (think of them as giving you a model of both \\(P(X|Y)\\) and \\(P(Y)\\)), and discriminative algorithms as simply providing classification splits.

Note that generative algorithms have discriminative properties, since you can get \\(P(Y|X)\\) once you have \\(P(X|Y)\\) and \\(P(Y)\\) (by Bayes' Theorem), though discriminative algorithms don't really have generative properties.

Discriminative algorithms allow you to classify points, without providing a model of how the points are actually generated. So these could be either: - probabilistic algorithms try to learn \\(P(Y|X)\\) (e.g., logistic regression); - or non-probabilistic algorithms that try to learn the mappings directly from the points to the classes (e.g., perceptron and SVMs simply give you a separating hyperplane, but no model of generating new points).

Another way of thinking about this is that generative algorithms make some kind of structure assumptions on your model, but discriminative algorithms make fewer assumptions. For example, Naive Bayes assumes conditional independence of your features, while logistic regression (the discriminative "counterpart" of Naive Bayes) does not.

<https://medium.com/@SmartLabAI/a-brief-overview-of-imitation-learning-8a8a75c44a9c>

**Reinforcement Learning**: Useful when we cannot specify a loss function, and we don't have labeled data. Also when agent needs to take some action, it's better to use RL. In fact in RL we even don't have the training data, and we have to learn from experience. Imagine playing chess: there is no training data to learn from, there is no label. All we have is reward signals.

**Imitation learning**: we use expert demonstration/policy to train our agent to find the best policy. The twist is that if everything is perfect we can use the expert policy out of the box (rule based system), however imitation learning is useful in scenarios where we cannot demonstrate every possible state action pair such as chess, or in scenarios where data is noisy and demonstration is not going to be the same as execution like in folding clothes. Some of the methods to do imitation learning include:

1.  behavioral cloning: using expert policy (P\*) provided by an expert and then the loss function would be L(a\*,P(s))
    where a\* is the action performed by the expert at state S, and P(s) is the action agent would perform given state S. We try to minimize this loss. This is supervised learning.
2.  inverse reinforcement learning is to use expert policy to find the reward function, and then find the optimal policy
3.  direct policy learning which needs interactive expert


### RNN {#rnn}

```text
Useful when dealing with sequential data like language or sound. Feed forward networks are not good fit for sequential data because they don't satisfy the following properties. *RNNs are Turing complete*
```

1.  handle **variable length** sequence
2.  **long term dependencies** to be tracked
3.  maintain info about **order**
4.  **share parameters** across the sequence

Therefore we use RNN for sequence modeling. If we unfold an RNN we could easily see how it works. we use both input and hidden to compute the output. For the first input we don't have any hidden so either we use random or zero. Therefore we have 2 different weights to learn. one that connects input to the neuron and the other one which connects hidden to the neuron. Note that the output=hidden.

\\(h\_t=sigmoid(W\_x.X+W\_h.h\_{t-1})\\) where \\(h\_{t-1}\\) is the hidden (output) at one time step before. I just ignored bias in this formula. so \\(h\_t=output\_t\\)

the network is same for each batch starting from t=0 to t=n, then for the next batch we start from t=0, which means we start from the beginning of the network with weights already learned, and for hidden we can initialize it again. In other words every time we call model(x) in our code it starts from t=0 to t=n, and then until the next time we call model(x) that we start from the beginning of the network again


### LSTM {#lstm}

watch this video for explanation. <https://www.youtube.com/watch?v=WCUNPb-5EYI>

**Exploding gradients**: when derivative of activation function is too large for many of them, the multiplication of these numbers would be very large

**Vanishing gradients**: The exact opposite situation of exploding gradients where the derivative of activation function is too small, and the multiplication becomes almost zero and therefore we cannot update the weights because we don't have any direction to go.

**Generative** models: are type of **unsupervised** learning. **VAE**, and **GAN** are generative models

**Autoencoders**: An encoder-decoder that use a deep network to learn a mapping from input to latent space (which is feature representations), this is the encoding phase, and using the latent features to reconstruct the same input data using the same deep network (it should be symmetric), and obviously the loss would be the difference between the reconstructed (~~generated~~) output and the original input. The second phase is the decoding part.
We can think of autoencoders as dimensionality reduction methods, as well as unsupervised feature extraction methods.

After training the autoencoder. we can throw away the decoder part, and use encoder to extract features, and use that to initialize a supervised model. Refer to myQuestions for why we cannot use decoder part for generation.

In order to be able to use the decoder of our autoencoder for generative purpose, we have to be sure that the latent space is regular enough. One possible solution to obtain such regularity is to introduce explicit regularization during the training process. A variational autoencoder can be defined as being an autoencoder whose training is regularized to avoid overfitting and ensure that the latent space has good properties that enable generative process.

**Variational Autoencoders**: the probabilistic version of autoencoders that can be used to generate data. Variational Autoencoders are regularized version of autoencoders making the generative process possible, while we cannot use autoencoders to generate data. The training is the same as autoencoder with one difference which is: **instead of encoding an input as a single vector, we encode it as a distribution over the latent space**. The decoder then samples a data point (vector) from that distribution, and decode the point and then the rest is the same to compute reconstruction error. The loss function also has a regularization term which is to make distributions returned by the encoder close to a standard normal distribution (gaussian). This term is expressed as the KL divergence between the 2 distribution.

graph:

simple autoencoder: (deterministic)
input --&gt; latent representation --&gt; reconstructed input
x --&gt; z=e(x) --&gt; d(z)= d(e(x))

variational autoencoder: (probabilistic)
input --&gt; latent distribution --&gt; sampled latent distribution --&gt; reconstructed input
x --&gt; p(z|x) --&gt; z~p(z|x) --&gt; d(z)

refer to this post: <https://towardsdatascience.com/understanding-variational-autoencoders-vaes-f70510919f73>

**Dimensionality Reduction**: the process of reducing the number of features that describe some data.
useful for data storage, heavy computation, and data visualization (we cannot visualize data of more than 3 dimensions). **Autoencoders are also a dimensionality reduction method**.

Autoencoders w/o deep network would be an encoder/decoder which is a general paradigm for dimensionality reduction. Therefore PCA can be described as an encoder-decoder paradigm in which we try to minimize the reconstruction error which is the difference between x and d(e(x))

**Principal Component Analysis (PCA)**: A dimensionality reduction method which can also be defined in terms of encoder-decoder.

PCA finds basis vectors called principal components. \\([1,2,3]=c\_1[1,0,0]+c\_2[0,1,0]+c\_3[0,0,1]\\)

Each vector here is one of the principal components. We have 3 principal components (think of them as coordinates, directions)

**Neural Turing Machine**: It's an RNN where a neural network coupled to external memory resources, and memory interaction are differentiable end-to-end.


### Gaussian Mixture Models (GMM) {#gaussian-mixture-models--gmm}

**Parametric models**: A learning model that summarizes data with a set of parameters of fixed size (independent of the number of training examples)

**Non-Parametric methods**: In which we don't assume any fixed number of parameters. When we don't have any prior knowledge about data. Models include Decision Tree, kNN, SVM, ANN (feed forward).


### multi-label classification {#multi-label-classification}

Multi-label classification is the problem of finding a model that maps inputs x to binary vectors y (assigning a value of 0 or 1 for each element (label) in y).

Problem transformation methods try to transform the multilabel classification into binary or multiclass classification problems. Algorithm adaptation methods adapt multiclass algorithms so they can be applied directly to the problem


### Reconstructing images in generative models {#reconstructing-images-in-generative-models}

Problem: I wanted to show the reconstructed image from decoder, but the decoder's output was an embedding vector, and I was struggling to visualize it.

Solution: You cannot visualize an embedding as an RGB image. If you want to visualize your reconstructed image, you have to define your network in a way that it's last layer of decoder has the same shape as image input (channels, width, height)
