+++
title = "Paper Localizing Active Objects From Egocentric Vision"
author = ["Kasra Darvish"]
date = 2024-02-08
draft = true
+++

This paper is published in ACL and you can find it using [this link](https://aclanthology.org/2023.emnlp-main.304/).

It's super interesting to see how different research projects are taking advantage of [LLMs]({{< relref "large-language-models" >}}) (GPT) by prompting them to do something and use those results to solve another problem.


## Summary {#summary}

This paper tackles the problem of grounding (localizing) objects in images using text instructions by focusing on pre- and post-conditions of target objects; they call this **active object grounding**.

{{< figure src="/blog/ox-hugo/_20240208_135721active-grounding-egocentric-task.png" >}}

The authors introduce a novel prompting mechanism to extract pre- and post-conditions for the target objects, as well as additional knowledge about the target objects (based on the text instruction).

Their complete system consists of prompting GPT for acquiring the information mentioned above, a GLIP model for multimodal grounding with an added subcomponent for frame-type prediction (Pre/point-of-no-return (PNR)/Post), and a per-object knowledge aggregation that is used for ranking regressed bounding boxes. Per-object knowledge aggregation is done by combining frame-type prediction and per-object masks by the dot product.

{{< figure src="/blog/ox-hugo/_20240208_133848active-grounding-egocentric-model.png" >}}
