<?php
/* (c) EspoCRM */

namespace Espo\ApiClient;

class Response
{
    /**
     * @var int
     */
    private $code;
    /**
     * @var string|null
     */
    private $contentType;
    /**
     * @var string
     */
    private $headersPart;
    /**
     * @var string
     */
    private $bodyPart;
    public function __construct(int $code, ?string $contentType, string $headersPart, string $bodyPart)
    {
        $this->code = $code;
        $this->contentType = $contentType;
        $this->headersPart = $headersPart;
        $this->bodyPart = $bodyPart;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getHeadersPart(): string
    {
        return $this->headersPart;
    }

    public function getBodyPart(): string
    {
        return $this->bodyPart;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @return mixed
     */
    public function getParsedBody()
    {
        if ($this->getContentType() === 'application/json') {
            return json_decode($this->getBodyPart());
        }

        return null;
    }
}
