---
layout: page
title: News
permalink: /news/
---


<div class="row">
  <div class="col-sm-6">
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

  <div class="col-sm-6">
    <a class="twitter-timeline"  href="https://twitter.com/AYABApparat" data-widget-id="736927460458168320">Tweets by @AYABApparat</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>
