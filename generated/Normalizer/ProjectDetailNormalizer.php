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
class ProjectDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Tilkee\\API\\Model\\ProjectDetail') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Tilkee\API\Model\ProjectDetail) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tilkee\API\Model\ProjectDetail();
        if (property_exists($data, 'leader')) {
            $object->setLeader($this->denormalizer->denormalize($data->{'leader'}, 'Tilkee\\API\\Model\\Leader', 'json', $context));
        }
        if (property_exists($data, 'collaborators')) {
            $values = array();
            foreach ($data->{'collaborators'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Tilkee\\API\\Model\\Collaborator', 'json', $context);
            }
            $object->setCollaborators($values);
        }
        if (property_exists($data, 'theme')) {
            $object->setTheme($this->denormalizer->denormalize($data->{'theme'}, 'Tilkee\\API\\Model\\Theme', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLeader()) {
            $data->{'leader'} = $this->normalizer->normalize($object->getLeader(), 'json', $context);
        }
        if (null !== $object->getCollaborators()) {
            $values = array();
            foreach ($object->getCollaborators() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'collaborators'} = $values;
        }
        if (null !== $object->getTheme()) {
            $data->{'theme'} = $this->normalizer->normalize($object->getTheme(), 'json', $context);
        }
        return $data;
    }
}