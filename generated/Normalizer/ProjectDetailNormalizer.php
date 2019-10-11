<?php

namespace HbsResearch\Tilkee\API\Normalizer;

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
        return 'HbsResearch\\Tilkee\\API\\Model\\ProjectDetail' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ProjectDetail' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ProjectDetail();
        if (property_exists($data, 'nb_connections') && null !== $data->{'nb_connections'}) {
            $object->setNbConnections($data->{'nb_connections'});
        }
        if (property_exists($data, 'total_time') && null !== $data->{'total_time'}) {
            $object->setTotalTime($data->{'total_time'});
        }
        if (property_exists($data, 'leader') && null !== $data->{'leader'}) {
            $object->setLeader($this->denormalizer->denormalize($data->{'leader'}, 'HbsResearch\\Tilkee\\API\\Model\\Leader', 'json', $context));
        }
        if (property_exists($data, 'collaborators') && null !== $data->{'collaborators'}) {
            $values = array();
            foreach ($data->{'collaborators'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'HbsResearch\\Tilkee\\API\\Model\\Collaborator', 'json', $context);
            }
            $object->setCollaborators($values);
        }
        if (property_exists($data, 'theme') && null !== $data->{'theme'}) {
            $object->setTheme($this->denormalizer->denormalize($data->{'theme'}, 'HbsResearch\\Tilkee\\API\\Model\\Theme', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNbConnections()) {
            $data->{'nb_connections'} = $object->getNbConnections();
        }
        if (null !== $object->getTotalTime()) {
            $data->{'total_time'} = $object->getTotalTime();
        }
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
