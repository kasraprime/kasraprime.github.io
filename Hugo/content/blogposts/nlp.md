+++
title = "Nlp"
author = ["Kasra Darvish"]
date = 2023-08-08
draft = true
+++

Q: What is a joint probability?

We have formal languages like programming languages, and natural languages like English. Natural languages are not formally specified, therefore we need statistical models to learn from examples, and approximate the natural lang.

the number of times a term occurs in a document is called its **term frequency**

Language modeling is the task of **assigning a probability** to sentences in a language. The notion of a language model is inherently probabilistic. A language model is a function that puts a probability measure over strings drawn from some vocabulary. A language model can be developed and used standalone, such as to generate new sequences of text that appear to have come from the corpus.

we have 2 categories of language models: 1- statistical (probabilistic) models 2- Neural language models

Typically, neural net language models are constructed and trained as [probabilistic classifiers](https://en.wikipedia.org/wiki/Probabilistic_classifier) that learn to predict a probability distribution

Based on <https://medium.com/analytics-vidhya/introduction-to-natural-language-processing-part-1-777f972cc7b3>:

The process of turning **text into numbers** is commonly known as **vectorization** or **embedding techniques**

We can measure how **similar** two words by measuring the **angles between the vectors** or by examining their dot product.

We can also map documents, characters or groups of words to vectors as well.

**Document** is a term that gets thrown around a lot in the NLP field. It refers to an **unbroken entity of text**, usually one that is of interest to the analysis task. For example, if you are trying to create an algorithm to identify spam emails, each email would be its own document.

Vectorizing groups of words helps us differentiate between words with more than one semantic meaning (capturing the context). For example, "crash" can refer to a "car crash" or a "stock market crash" or intruding into a party.

The underlying mechanism to creating these vectors is by examining the **context** in which these words appear. We can examine **how often a certain word appears** in each document, or how often two words **co-occur** together.

All of these embedding techniques are reliant on the **distributional hypothesis**, the assumption that "words which are used and occur in the same contexts tend to purport similar meaning".

Bag of Words (BOW): the simplest method for vectorization (embedding technique)
Cons: Bag of words is not a good representation of language, especially **when you have a small vocabulary**. It **ignores word order**, **word relationships** and **produces sparse vectors** that is largely filled with zeros.

in BOW, words like a, the are the most frequent, to normalize this we use tf-idf


## n-gram model {#n-gram-model}

An **n-gram model** is a type of probabilistic [language model](https://en.wikipedia.org/wiki/Language_model) for predicting the next item in such a sequence in the form of a (_n_ − 1)--order [Markov model](https://en.wikipedia.org/wiki/Markov_chain). with larger _n_, a model can store more context .

This idea can be traced to an experiment by [Claude Shannon](https://en.wikipedia.org/wiki/Claude_Shannon)'s work in [information theory](https://en.wikipedia.org/wiki/Information_theory). Shannon posed the question: given a sequence of letters (for example, the sequence "for ex"), what is the [likelihood](https://en.wikipedia.org/wiki/Likelihood) of the next letter? From training data, one can derive a [probability distribution](https://en.wikipedia.org/wiki/Probability_distribution) for the next letter given a history of size n<https://wikimedia.org/api/rest_v1/media/math/render/svg/a601995d55609f2d9f5e233e36fbe9ea26011b3b>: _a_ = 0.4, _b_ = 0.00001, _c_ = 0, ....; where the probabilities of all possible "next-letters" **sum to 1.0**.

More concisely, an _n_-gram model predicts \\(x\_i\\) based on \\(x\_{i-(n-1)},...,x\_{i-1}\\)

Pros: Two benefits of _n_-gram models (and algorithms that use them) are **simplicity** and **scalability**


## bag of words {#bag-of-words}

special case of n-grams with n=1. good for word frequency.

we get all words in all corpus. imagine there is m words in all the documents. then we create an m-dimensional vector for each document. so if we have d documents we have d vectors each m-dimensional, or we can have an m\*d matrix. in each document we count the number of times each of the m words are repeated. that's bow.

-   Cons:
    1.  it is very sparse because not all the words are used in all documents.
    2.  having similar vectors for words that are not similar. (refer to medium post example)


## Word2vec {#word2vec}

<http://mccormickml.com/2016/04/19/word2vec-tutorial-the-skip-gram-model/>

if we have v different words in all the documents, then we have a v-dimensional one hot vector to represent each word as initialization and input to the shallow neural network. then we have a hidden layer with 300 neurons, which after training would be our word embedding. and the output of this hidden layer goes to softmax and produces the output layer which is again v-dimensional, but **not one-hot vector**, because it gives the probability for each word that can appear after the word given as input.so we have a v-dimensional vector with bunch of float elements representing the probability, and the sum of all v elements is 1.


## Doc2vec {#doc2vec}

<https://medium.com/scaleabout/a-gentle-introduction-to-doc2vec-db3e8c0cce5e>
