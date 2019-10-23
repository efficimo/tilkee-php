<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProjectDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ProjectData' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\ProjectData' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ProjectData();
        if (property_exists($data, 'interest') && null !== $data->{'interest'}) {
            $object->setInterest($data->{'interest'});
        }
        if (property_exists($data, 'nb_connections') && null !== $data->{'nb_connections'}) {
            $object->setNbConnections($data->{'nb_connections'});
        }
        if (property_exists($data, 'total_time') && null !== $data->{'total_time'}) {
            $object->setTotalTime($data->{'total_time'});
        }
        if (property_exists($data, 'median_nb_pages_readed') && null !== $data->{'median_nb_pages_readed'}) {
            $object->setMedianNbPagesReaded($data->{'median_nb_pages_readed'});
        }
        if (property_exists($data, 'median_percentage_read') && null !== $data->{'median_percentage_read'}) {
            $object->setMedianPercentageRead($data->{'median_percentage_read'});
        }
        if (property_exists($data, 'median_time_before_opening') && null !== $data->{'median_time_before_opening'}) {
            $object->setMedianTimeBeforeOpening($data->{'median_time_before_opening'});
        }
        if (property_exists($data, 'median_time_read') && null !== $data->{'median_time_read'}) {
            $object->setMedianTimeRead($data->{'median_time_read'});
        }
        if (property_exists($data, 'median_time_to_download') && null !== $data->{'median_time_to_download'}) {
            $object->setMedianTimeToDownload($data->{'median_time_to_download'});
        }
        if (property_exists($data, 'nb_connexions_failed') && null !== $data->{'nb_connexions_failed'}) {
            $object->setNbConnexionsFailed($data->{'nb_connexions_failed'});
        }
        if (property_exists($data, 'pt_note') && null !== $data->{'pt_note'}) {
            $object->setPtNote($data->{'pt_note'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getInterest()) {
            $data->{'interest'} = $object->getInterest();
        }
        if (null !== $object->getNbConnections()) {
            $data->{'nb_connections'} = $object->getNbConnections();
        }
        if (null !== $object->getTotalTime()) {
            $data->{'total_time'} = $object->getTotalTime();
        }
        if (null !== $object->getMedianNbPagesReaded()) {
            $data->{'median_nb_pages_readed'} = $object->getMedianNbPagesReaded();
        }
        if (null !== $object->getMedianPercentageRead()) {
            $data->{'median_percentage_read'} = $object->getMedianPercentageRead();
        }
        if (null !== $object->getMedianTimeBeforeOpening()) {
            $data->{'median_time_before_opening'} = $object->getMedianTimeBeforeOpening();
        }
        if (null !== $object->getMedianTimeRead()) {
            $data->{'median_time_read'} = $object->getMedianTimeRead();
        }
        if (null !== $object->getMedianTimeToDownload()) {
            $data->{'median_time_to_download'} = $object->getMedianTimeToDownload();
        }
        if (null !== $object->getNbConnexionsFailed()) {
            $data->{'nb_connexions_failed'} = $object->getNbConnexionsFailed();
        }
        if (null !== $object->getPtNote()) {
            $data->{'pt_note'} = $object->getPtNote();
        }

        return $data;
    }
}
