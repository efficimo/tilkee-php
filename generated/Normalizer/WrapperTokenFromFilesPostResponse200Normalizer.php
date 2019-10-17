<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class WrapperTokenFromFilesPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\WrapperTokenFromFilesPostResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\WrapperTokenFromFilesPostResponse200' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\WrapperTokenFromFilesPostResponse200();
        if (property_exists($data, 'project') && null !== $data->{'project'}) {
            $object->setProject($this->denormalizer->denormalize($data->{'project'}, 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json', $context));
        }
        if (property_exists($data, 'token') && null !== $data->{'token'}) {
            $object->setToken($this->denormalizer->denormalize($data->{'token'}, 'HbsResearch\\Tilkee\\API\\Model\\Token', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getProject()) {
            $data->{'project'} = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if (null !== $object->getToken()) {
            $data->{'token'} = $this->normalizer->normalize($object->getToken(), 'json', $context);
        }

        return $data;
    }
}
