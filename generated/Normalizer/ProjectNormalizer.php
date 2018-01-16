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
class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Tilkee\\API\\Model\\Project') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Tilkee\API\Model\Project) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tilkee\API\Model\Project();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'created_at')) {
            $value = $data->{'created_at'};
            if (is_string($data->{'created_at'}) and false !== \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'created_at'})) {
                $value = \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'created_at'});
            }
            if (is_null($data->{'created_at'})) {
                $value = $data->{'created_at'};
            }
            $object->setCreatedAt($value);
        }
        if (property_exists($data, 'updated_at')) {
            $value_1 = $data->{'updated_at'};
            if (is_string($data->{'updated_at'}) and false !== \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'updated_at'})) {
                $value_1 = \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'updated_at'});
            }
            if (is_null($data->{'updated_at'})) {
                $value_1 = $data->{'updated_at'};
            }
            $object->setUpdatedAt($value_1);
        }
        if (property_exists($data, 'archived_at')) {
            $object->setArchivedAt($data->{'archived_at'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'won')) {
            $object->setWon($data->{'won'});
        }
        if (property_exists($data, 'is_template')) {
            $object->setIsTemplate($data->{'is_template'});
        }
        if (property_exists($data, 'can_be_downladed')) {
            $object->setCanBeDownladed($data->{'can_be_downladed'});
        }
        if (property_exists($data, 'preview')) {
            $object->setPreview($data->{'preview'});
        }
        if (property_exists($data, 'preview_new')) {
            $object->setPreviewNew($data->{'preview_new'});
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($data->{'duration'});
        }
        if (property_exists($data, 'is_or_was_signable')) {
            $object->setIsOrWasSignable($data->{'is_or_was_signable'});
        }
        if (property_exists($data, 'last_sign_in_at')) {
            $value_2 = $data->{'last_sign_in_at'};
            if (is_string($data->{'last_sign_in_at'}) and false !== \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'last_sign_in_at'})) {
                $value_2 = \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'last_sign_in_at'});
            }
            if (isset($data->{'last_sign_in_at'})) {
                $value_2 = $data->{'last_sign_in_at'};
            }
            $object->setLastSignInAt($value_2);
        }
        if (property_exists($data, 'signed')) {
            $object->setSigned($data->{'signed'});
        }
        if (property_exists($data, 'starred')) {
            $object->setStarred($data->{'starred'});
        }
        if (property_exists($data, 'external_id')) {
            $object->setExternalId($data->{'external_id'});
        }
        if (property_exists($data, 'token_url')) {
            $object->setTokenUrl($data->{'token_url'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'collaborators_count')) {
            $object->setCollaboratorsCount($data->{'collaborators_count'});
        }
        if (property_exists($data, 'first_access_at')) {
            $object->setFirstAccessAt($data->{'first_access_at'});
        }
        if (property_exists($data, 'nb_connections')) {
            $object->setNbConnections($data->{'nb_connections'});
        }
        if (property_exists($data, 'total_time')) {
            $object->setTotalTime($data->{'total_time'});
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
        $value = $object->getCreatedAt();
        if (is_object($object->getCreatedAt())) {
            $value = $object->getCreatedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (is_null($object->getCreatedAt())) {
            $value = $object->getCreatedAt();
        }
        $data->{'created_at'} = $value;
        $value_1 = $object->getUpdatedAt();
        if (is_object($object->getUpdatedAt())) {
            $value_1 = $object->getUpdatedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (is_null($object->getUpdatedAt())) {
            $value_1 = $object->getUpdatedAt();
        }
        $data->{'updated_at'} = $value_1;
        if (null !== $object->getArchivedAt()) {
            $data->{'archived_at'} = $object->getArchivedAt();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getWon()) {
            $data->{'won'} = $object->getWon();
        }
        if (null !== $object->getIsTemplate()) {
            $data->{'is_template'} = $object->getIsTemplate();
        }
        if (null !== $object->getCanBeDownladed()) {
            $data->{'can_be_downladed'} = $object->getCanBeDownladed();
        }
        if (null !== $object->getPreview()) {
            $data->{'preview'} = $object->getPreview();
        }
        if (null !== $object->getPreviewNew()) {
            $data->{'preview_new'} = $object->getPreviewNew();
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $object->getDuration();
        }
        if (null !== $object->getIsOrWasSignable()) {
            $data->{'is_or_was_signable'} = $object->getIsOrWasSignable();
        }
        if (null !== $object->getLastSignInAt()) {
            $value_2 = $object->getLastSignInAt();
            if (is_object($object->getLastSignInAt())) {
                $value_2 = $object->getLastSignInAt()->format("Y-m-d\TH:i:s.uP");
            }
            if (!is_null($object->getLastSignInAt())) {
                $value_2 = $object->getLastSignInAt();
            }
            $data->{'last_sign_in_at'} = $value_2;
        }
        if (null !== $object->getSigned()) {
            $data->{'signed'} = $object->getSigned();
        }
        if (null !== $object->getStarred()) {
            $data->{'starred'} = $object->getStarred();
        }
        if (null !== $object->getExternalId()) {
            $data->{'external_id'} = $object->getExternalId();
        }
        if (null !== $object->getTokenUrl()) {
            $data->{'token_url'} = $object->getTokenUrl();
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getCollaboratorsCount()) {
            $data->{'collaborators_count'} = $object->getCollaboratorsCount();
        }
        if (null !== $object->getFirstAccessAt()) {
            $data->{'first_access_at'} = $object->getFirstAccessAt();
        }
        if (null !== $object->getNbConnections()) {
            $data->{'nb_connections'} = $object->getNbConnections();
        }
        if (null !== $object->getTotalTime()) {
            $data->{'total_time'} = $object->getTotalTime();
        }
        return $data;
    }
}