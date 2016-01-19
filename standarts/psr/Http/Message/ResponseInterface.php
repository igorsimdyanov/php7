<?php ## Ответ сервера MessageInterface.
  namespace Psr\Http\Message;

  interface ResponseInterface extends MessageInterface
  {
    public function getStatusCode();
    public function withStatus($code, $reasonPhrase = '');
    public function getReasonPhrase();
  }