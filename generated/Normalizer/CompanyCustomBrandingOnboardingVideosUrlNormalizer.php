<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompanyCustomBrandingOnboardingVideosUrlNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\CompanyCustomBrandingOnboardingVideosUrl' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\CompanyCustomBrandingOnboardingVideosUrl' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\CompanyCustomBrandingOnboardingVideosUrl();
        if (property_exists($data, 'en') && null !== $data->{'en'}) {
            $object->setEn($data->{'en'});
        }
        if (property_exists($data, 'de') && null !== $data->{'de'}) {
            $object->setDe($data->{'de'});
        }
        if (property_exists($data, 'fr') && null !== $data->{'fr'}) {
            $object->setFr($data->{'fr'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getEn()) {
            $data->{'en'} = $object->getEn();
        }
        if (null !== $object->getDe()) {
            $data->{'de'} = $object->getDe();
        }
        if (null !== $object->getFr()) {
            $data->{'fr'} = $object->getFr();
        }

        return $data;
    }
}
