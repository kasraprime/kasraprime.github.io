+++
title = "Classification"
author = ["Kasra Darvish"]
date = 2023-08-08
draft = true
+++

## Why Classification {#why-classification}

As Gendler states (2011), "classifying objects into groups allows us to proceed effectively in an environment teeming with overwhelming detail."


## Random Baseline {#random-baseline}

In order to compute the accuracy of a random baseline for a multi-class classfication you can simply:
\\[acc = P(y=0) \times P(\hat{y}=0) + P(class is 1) \times P(you guess 1) \\]
where P(y=1) means the probability that the class is actually 1, and \\(P(\hat{y}=1)\\) means tne probability that you guess 1.


## Majority-Class Classifier {#majority-class-classifier}

This a baseline which is equal or better than random baseline (False. It can be worst) in which we always predict the majority class.
It's also called zero rule (ZeroR or 0R).
