<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserUtmItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\UserUtmItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\UserUtmItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\UserUtmItem();
        if (property_exists($data, 'url_referer') && null !== $data->{'url_referer'}) {
            $object->setUrlReferer($data->{'url_referer'});
        }
        if (property_exists($data, 'UTM') && null !== $data->{'UTM'}) {
            $object->setUTM($this->denormalizer->denormalize($data->{'UTM'}, 'HbsResearch\\Tilkee\\API\\Model\\UserUtmItemUTM', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUrlReferer()) {
            $data->{'url_referer'} = $object->getUrlReferer();
        }
        if (null !== $object->getUTM()) {
            $data->{'UTM'} = $this->normalizer->normalize($object->getUTM(), 'json', $context);
        }

        return $data;
    }
}
