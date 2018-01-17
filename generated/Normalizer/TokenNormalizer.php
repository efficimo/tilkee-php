<?php

namespace Tilkee\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TokenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Tilkee\\API\\Model\\Token') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Tilkee\API\Model\Token) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tilkee\API\Model\Token();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'project_name')) {
            $object->setProjectName($data->{'project_name'});
        }
        if (property_exists($data, 'link')) {
            $object->setLink($data->{'link'});
        }
        if (property_exists($data, 'won')) {
            $object->setWon($data->{'won'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'created_at'}));
        }
        if (property_exists($data, 'consulted')) {
            $object->setConsulted($data->{'consulted'});
        }
        if (property_exists($data, 'signed_status')) {
            $object->setSignedStatus($data->{'signed_status'});
        }
        if (property_exists($data, 'archived_at')) {
            $object->setArchivedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'archived_at'}));
        }
        if (property_exists($data, 'signed')) {
            $object->setSigned($data->{'signed'});
        }
        if (property_exists($data, 'signed_docs')) {
            $values = array();
            foreach ($data->{'signed_docs'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Tilkee\\API\\Model\\TokenSignedDocsItem', 'json', $context);
            }
            $object->setSignedDocs($values);
        }
        if (property_exists($data, 'interest')) {
            $object->setInterest($data->{'interest'});
        }
        if (property_exists($data, 'project_id')) {
            $object->setProjectId($data->{'project_id'});
        }
        if (property_exists($data, 'preview_url')) {
            $object->setPreviewUrl($data->{'preview_url'});
        }
        if (property_exists($data, 'external_id')) {
            $object->setExternalId($data->{'external_id'});
        }
        if (property_exists($data, 'generated_by_prospect')) {
            $object->setGeneratedByProspect($data->{'generated_by_prospect'});
        }
        if (property_exists($data, 'first_access_at')) {
            $object->setFirstAccessAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'first_access_at'}));
        }
        if (property_exists($data, 'total_time')) {
            $object->setTotalTime($data->{'total_time'});
        }
        if (property_exists($data, 'last_sign_in_at')) {
            $value_1 = $data->{'last_sign_in_at'};
            if (is_string($data->{'last_sign_in_at'}) and false !== \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'last_sign_in_at'})) {
                $value_1 = \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'last_sign_in_at'});
            }
            if (isset($data->{'last_sign_in_at'})) {
                $value_1 = $data->{'last_sign_in_at'};
            }
            $object->setLastSignInAt($value_1);
        }
        if (property_exists($data, 'nb_connections')) {
            $object->setNbConnections($data->{'nb_connections'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getProjectName()) {
            $data->{'project_name'} = $object->getProjectName();
        }
        if (null !== $object->getLink()) {
            $data->{'link'} = $object->getLink();
        }
        if (null !== $object->getWon()) {
            $data->{'won'} = $object->getWon();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getConsulted()) {
            $data->{'consulted'} = $object->getConsulted();
        }
        if (null !== $object->getSignedStatus()) {
            $data->{'signed_status'} = $object->getSignedStatus();
        }
        if (null !== $object->getArchivedAt()) {
            $data->{'archived_at'} = $object->getArchivedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getSigned()) {
            $data->{'signed'} = $object->getSigned();
        }
        if (null !== $object->getSignedDocs()) {
            $values = array();
            foreach ($object->getSignedDocs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'signed_docs'} = $values;
        }
        if (null !== $object->getInterest()) {
            $data->{'interest'} = $object->getInterest();
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        }
        if (null !== $object->getPreviewUrl()) {
            $data->{'preview_url'} = $object->getPreviewUrl();
        }
        if (null !== $object->getExternalId()) {
            $data->{'external_id'} = $object->getExternalId();
        }
        if (null !== $object->getGeneratedByProspect()) {
            $data->{'generated_by_prospect'} = $object->getGeneratedByProspect();
        }
        if (null !== $object->getFirstAccessAt()) {
            $data->{'first_access_at'} = $object->getFirstAccessAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getTotalTime()) {
            $data->{'total_time'} = $object->getTotalTime();
        }
        if (null !== $object->getLastSignInAt()) {
            $value_1 = $object->getLastSignInAt();
            if (is_object($object->getLastSignInAt())) {
                $value_1 = $object->getLastSignInAt()->format("Y-m-d\TH:i:s.uP");
            }
            if (!is_null($object->getLastSignInAt())) {
                $value_1 = $object->getLastSignInAt();
            }
            $data->{'last_sign_in_at'} = $value_1;
        }
        if (null !== $object->getNbConnections()) {
            $data->{'nb_connections'} = $object->getNbConnections();
        }
        return $data;
    }
}