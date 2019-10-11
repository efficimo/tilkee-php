<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InputProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\InputProject' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\InputProject' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\InputProject();
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'archived_at') && null !== $data->{'archived_at'}) {
            $object->setArchivedAt($data->{'archived_at'});
        }
        if (property_exists($data, 'can_be_downladed') && null !== $data->{'can_be_downladed'}) {
            $object->setCanBeDownladed($data->{'can_be_downladed'});
        }
        if (property_exists($data, 'external_id') && null !== $data->{'external_id'}) {
            $object->setExternalId($data->{'external_id'});
        }
        if (property_exists($data, 'duration') && null !== $data->{'duration'}) {
            $object->setDuration($data->{'duration'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getArchivedAt()) {
            $data->{'archived_at'} = $object->getArchivedAt();
        }
        if (null !== $object->getCanBeDownladed()) {
            $data->{'can_be_downladed'} = $object->getCanBeDownladed();
        }
        if (null !== $object->getExternalId()) {
            $data->{'external_id'} = $object->getExternalId();
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $object->getDuration();
        }

        return $data;
    }
}
