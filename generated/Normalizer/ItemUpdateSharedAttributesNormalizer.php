<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ItemUpdateSharedAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ItemUpdateSharedAttributes' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\ItemUpdateSharedAttributes' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ItemUpdateSharedAttributes();
        if (property_exists($data, 'all') && null !== $data->{'all'}) {
            $object->setAll($data->{'all'});
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $object->setTeam($data->{'team'});
        }
        if (property_exists($data, 'user_ids') && null !== $data->{'user_ids'}) {
            $values = [];
            foreach ($data->{'user_ids'} as $value) {
                $values[] = $value;
            }
            $object->setUserIds($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAll()) {
            $data->{'all'} = $object->getAll();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        }
        if (null !== $object->getUserIds()) {
            $values = [];
            foreach ($object->getUserIds() as $value) {
                $values[] = $value;
            }
            $data->{'user_ids'} = $values;
        }

        return $data;
    }
}
