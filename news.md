---
layout: page
title: News
permalink: /news/
---


<div class="row">
    <ul class="posts">
    {% for post in site.posts %}
      <li>
        <span class="post-date">{{ post.date | date: "%b %-d, %Y" }}</span>
        <a class="post-link" href="{{ post.url | prepend: site.baseurl }}">{{ post.title }}</a>
      </li>
    {% endfor %}
    </ul>
    <p class="rss-subscribe"><a href="{{ "/feed.xml" | prepend: site.baseurl }}">subscribe RSS</a></p>
</div>
