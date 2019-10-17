<?php

namespace HbsResearch\Tilkee;

use Psr\Http\Message\ResponseInterface;

class UploadedFileResponse
{
    protected $location;
    protected $key;
    protected $etag;

    public static function fromResponse(ResponseInterface $response): self
    {
        $xml = ($response->getBody()->getContents());
        preg_match('#<Location>(.*)</Location>#U', $xml, $m);
        $url = $m[1];
        preg_match('#<Key>(.*)</Key>#U', $xml, $m);
        $key = $m[1];

        return (new self())
            ->setKey($key)
            ->setLocation($url)
        ;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }
}
