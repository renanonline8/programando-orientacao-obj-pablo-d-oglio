<?php
require_once 'Record.php';

trait ObjectConversionTrait {
    public function toXML() {
        $data = array_flip($this->data);
        $xml = new SimpleXMLElement('<' . get_class($this) . '/>');
        array_walk_recursive($data, array($xml, 'addChild'));
        return $xml->asXML();
    }

    public function toJSON() {
        return json_encode($this->data);
    }
}