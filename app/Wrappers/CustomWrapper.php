<?php


namespace App\Wrappers;

use Cristal\ApiWrapper\Transports\TransportInterface;

class CustomWrapper
{

    private $transport;

    public function __construct(TransportInterface $transport)
    {
        $this->transport = $transport;
    }

    public function getAuthors(array $filters)
    {
        return $this->transport->request('/authors', $filters);
    }

    public function getBooks(array $filters)
    {
        return $this->transport->request('/books', $filters);
    }

    public function getAuthorBooks($id, array $filters)
    {
        return $this->transport->request('/authors/' . $id . '/books', $filters);
    }

}
