<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResponseProjectListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ResponseProjectList' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\ResponseProjectList' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ResponseProjectList();
        if (property_exists($data, 'search') && null !== $data->{'search'}) {
            $object->setSearch($data->{'search'});
        }
        if (property_exists($data, 'limit') && null !== $data->{'limit'}) {
            $object->setLimit($data->{'limit'});
        }
        if (property_exists($data, 'offset') && null !== $data->{'offset'}) {
            $object->setOffset($data->{'offset'});
        }
        if (property_exists($data, 'total') && null !== $data->{'total'}) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'order') && null !== $data->{'order'}) {
            $object->setOrder($data->{'order'});
        }
        if (property_exists($data, 'contents') && null !== $data->{'contents'}) {
            $values = [];
            foreach ($data->{'contents'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'HbsResearch\\Tilkee\\API\\Model\\ResponseProjectListContentsItem', 'json', $context);
            }
            $object->setContents($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
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
            $values = [];
            foreach ($object->getContents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'contents'} = $values;
        }

        return $data;
    }
}
