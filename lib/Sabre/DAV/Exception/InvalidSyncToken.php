<?php

namespace Sabre\DAV\Exception;

use Sabre\DAV;

/**
 * InvalidSyncToken 
 *
 * This exception is emited for the {DAV:}valid-sync-token pre-condition, as
 * defined in rfc6578, section 3.2.
 *
 * http://tools.ietf.org/html/rfc6578#section-3.2
 *
 * This is emitted in cases where the the sync-token, supplied by a client is 
 * either completely unknown, or has expired.
 *
 * @author Evert Pot (http://evertpot.com/)
 * @copyright Copyright (C) 2007-2014 fruux GmbH (https://fruux.com/).
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
class InvalidSyncToken extends Forbidden {

    /**
     * This method allows the exception to include additional information into the WebDAV error response
     *
     * @param DAV\Server $server
     * @param \DOMElement $errorNode
     * @return void
     */
    public function serialize(DAV\Server $server,\DOMElement $errorNode) {

        $error = $errorNode->ownerDocument->createElementNS('DAV:','d:valid-sync-token');
        $errorNode->appendChild($error);

    }

}
