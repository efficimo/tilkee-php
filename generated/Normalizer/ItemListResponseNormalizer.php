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
class ItemListResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'HbsResearch\\Tilkee\\API\\Model\\ItemListResponse') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \HbsResearch\Tilkee\API\Model\ItemListResponse) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \HbsResearch\Tilkee\API\Model\ItemListResponse();
        if (property_exists($data, 'search')) {
            $object->setSearch($data->{'search'});
        }
        if (property_exists($data, 'limit')) {
            $object->setLimit($data->{'limit'});
        }
        if (property_exists($data, 'offset')) {
            $object->setOffset($data->{'offset'});
        }
        if (property_exists($data, 'total')) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'order')) {
            $object->setOrder($data->{'order'});
        }
        if (property_exists($data, 'contents')) {
            $values = array();
            foreach ($data->{'contents'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'HbsResearch\\Tilkee\\API\\Model\\Item', 'json', $context);
            }
            $object->setContents($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSearch()) {
            $data->{'search'} = $object->getSearch();
        }
        if (null !== $object->getLimit()) {
            $data->{'limit'} = $object->getLimit();
        }
        if (null !== $object->getOffset()) {
            $data->{'offset'} = $object->getOffset();
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        }
        if (null !== $object->getOrder()) {
            $data->{'order'} = $object->getOrder();
        }
        if (null !== $object->getContents()) {
            $values = array();
            foreach ($object->getContents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'contents'} = $values;
        }
        return $data;
    }
}