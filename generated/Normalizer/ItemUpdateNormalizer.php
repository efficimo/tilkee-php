<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ItemUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ItemUpdate' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\ItemUpdate' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ItemUpdate();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'title') && null !== $data->{'title'}) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'usable') && null !== $data->{'usable'}) {
            $object->setUsable($data->{'usable'});
        }
        if (property_exists($data, 'favorite') && null !== $data->{'favorite'}) {
            $object->setFavorite($data->{'favorite'});
        }
        if (property_exists($data, 'shared_attributes') && null !== $data->{'shared_attributes'}) {
            $object->setSharedAttributes($this->denormalizer->denormalize($data->{'shared_attributes'}, 'HbsResearch\\Tilkee\\API\\Model\\ItemUpdateSharedAttributes', 'json', $context));
        }
        if (property_exists($data, 'tags') && null !== $data->{'tags'}) {
            $values = [];
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }
        if (property_exists($data, 'visible') && null !== $data->{'visible'}) {
            $object->setVisible($data->{'visible'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getUsable()) {
            $data->{'usable'} = $object->getUsable();
        }
        if (null !== $object->getFavorite()) {
            $data->{'favorite'} = $object->getFavorite();
        }
        if (null !== $object->getSharedAttributes()) {
            $data->{'shared_attributes'} = $this->normalizer->normalize($object->getSharedAttributes(), 'json', $context);
        }
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        }
        if (null !== $object->getVisible()) {
            $data->{'visible'} = $object->getVisible();
        }

        return $data;
    }
}
