<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProjectListDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ProjectListDetail' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\ProjectListDetail' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ProjectListDetail();
        if (property_exists($data, 'nb_connections') && null !== $data->{'nb_connections'}) {
            $object->setNbConnections($data->{'nb_connections'});
        }
        if (property_exists($data, 'total_time') && null !== $data->{'total_time'}) {
            $object->setTotalTime($data->{'total_time'});
        }
        if (property_exists($data, 'leader_first_name') && null !== $data->{'leader_first_name'}) {
            $object->setLeaderFirstName($data->{'leader_first_name'});
        }
        if (property_exists($data, 'leader_last_name') && null !== $data->{'leader_last_name'}) {
            $object->setLeaderLastName($data->{'leader_last_name'});
        }
        if (property_exists($data, 'leader_id') && null !== $data->{'leader_id'}) {
            $object->setLeaderId($data->{'leader_id'});
        }
        if (property_exists($data, 'leader_avatar') && null !== $data->{'leader_avatar'}) {
            $object->setLeaderAvatar($data->{'leader_avatar'});
        }
        if (property_exists($data, 'tokens_count') && null !== $data->{'tokens_count'}) {
            $object->setTokensCount($data->{'tokens_count'});
        }
        if (property_exists($data, 'project_items_count') && null !== $data->{'project_items_count'}) {
            $object->setProjectItemsCount($data->{'project_items_count'});
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
        if (null !== $object->getLeaderFirstName()) {
            $data->{'leader_first_name'} = $object->getLeaderFirstName();
        }
        if (null !== $object->getLeaderLastName()) {
            $data->{'leader_last_name'} = $object->getLeaderLastName();
        }
        if (null !== $object->getLeaderId()) {
            $data->{'leader_id'} = $object->getLeaderId();
        }
        if (null !== $object->getLeaderAvatar()) {
            $data->{'leader_avatar'} = $object->getLeaderAvatar();
        }
        if (null !== $object->getTokensCount()) {
            $data->{'tokens_count'} = $object->getTokensCount();
        }
        if (null !== $object->getProjectItemsCount()) {
            $data->{'project_items_count'} = $object->getProjectItemsCount();
        }

        return $data;
    }
}
