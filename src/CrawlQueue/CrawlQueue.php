<?php

namespace Famdirksen\Crawler\CrawlQueue;

use Famdirksen\Crawler\CrawlUrl;

interface CrawlQueue
{
    public function add(CrawlUrl $url): self;

    public function has($crawlUrl): bool;

    public function hasPendingUrls(): bool;

    public function getUrlById(int $id): CrawlUrl;

    /** @return \Famdirksen\Crawler\CrawlUrl|null */
    public function getFirstPendingUrl();

    public function hasAlreadyBeenProcessed(CrawlUrl $url): bool;

    public function markAsProcessed(CrawlUrl $crawlUrl);
}
