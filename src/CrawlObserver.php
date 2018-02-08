<?php

namespace Famdirksen\Crawler;

use Psr\Http\Message\UriInterface;

interface CrawlObserver
{
    /**
     * Called when the crawler will crawl the url.
     *
     * @param \Psr\Http\Message\UriInterface $url
     *
     * @return void
     */
    public function willCrawl(UriInterface $url);

    /**
     * Called when the crawler has crawled the given url.
     *
     * @param \Psr\Http\Message\UriInterface $url
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param \Psr\Http\Message\UriInterface|null $foundOnUrl
     *
     * @return void
     */
    public function hasBeenCrawled(UriInterface $url, $response, ?UriInterface $foundOnUrl = null);
    
    /**
     * Called when the crawler has found an url on a page.
     *
     * @param \Psr\Http\Message\UriInterface $urlFound
     * @param \Psr\Http\Message\UriInterface $foundOnUrl
     *
     * @return void
     */
    public function urlFoundOnPage(UriInterface $urlFound, UriInterface $foundOnUrl);

    /**
     * Called when the crawl has ended.
     *
     * @return void
     */
    public function finishedCrawling();
}
