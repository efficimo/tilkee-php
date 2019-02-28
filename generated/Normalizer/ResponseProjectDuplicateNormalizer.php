<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ResponseProjectDuplicateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'HbsResearch\\Tilkee\\API\\Model\\ResponseProjectDuplicate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \HbsResearch\Tilkee\API\Model\ResponseProjectDuplicate) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \HbsResearch\Tilkee\API\Model\ResponseProjectDuplicate();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at')) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'updated_at'}));
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
            $value = $data->{'last_sign_in_at'};
            if (is_string($data->{'last_sign_in_at'}) and false !== \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'last_sign_in_at'})) {
                $value = \DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'last_sign_in_at'});
            }
            if (isset($data->{'last_sign_in_at'})) {
                $value = $data->{'last_sign_in_at'};
            }
            $object->setLastSignInAt($value);
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
        if (property_exists($data, 'consultable')) {
            $object->setConsultable($data->{'consultable'});
        }
        if (property_exists($data, 'iframes')) {
            $object->setIframes($data->{'iframes'});
        }
        if (property_exists($data, 'theme')) {
            $object->setTheme($this->denormalizer->denormalize($data->{'theme'}, 'HbsResearch\\Tilkee\\API\\Model\\Theme', 'json', $context));
        }
        if (property_exists($data, 'tokens')) {
            $values = array();
            foreach ($data->{'tokens'} as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, 'HbsResearch\\Tilkee\\API\\Model\\Token', 'json', $context);
            }
            $object->setTokens($values);
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
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:s.uP");
        }
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
            $value = $object->getLastSignInAt();
            if (is_object($object->getLastSignInAt())) {
                $value = $object->getLastSignInAt()->format("Y-m-d\TH:i:s.uP");
            }
            if (!is_null($object->getLastSignInAt())) {
                $value = $object->getLastSignInAt();
            }
            $data->{'last_sign_in_at'} = $value;
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
        if (null !== $object->getConsultable()) {
            $data->{'consultable'} = $object->getConsultable();
        }
        if (null !== $object->getIframes()) {
            $data->{'iframes'} = $object->getIframes();
        }
        if (null !== $object->getTheme()) {
            $data->{'theme'} = $this->normalizer->normalize($object->getTheme(), 'json', $context);
        }
        if (null !== $object->getTokens()) {
            $values = array();
            foreach ($object->getTokens() as $value_1) {
                $values[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'tokens'} = $values;
        }
        return $data;
    }
}