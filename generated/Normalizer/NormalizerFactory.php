<?php

namespace Tilkee\API\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ProjectNormalizer();
        $normalizers[] = new ProjectDetailNormalizer();
        $normalizers[] = new ProjectListDetailNormalizer();
        $normalizers[] = new ResponseProjectListNormalizer();
        $normalizers[] = new ResponseProjectListContentsItemNormalizer();
        $normalizers[] = new InputProjectNormalizer();
        $normalizers[] = new ThemeNormalizer();
        $normalizers[] = new LeaderNormalizer();
        $normalizers[] = new DeviceNormalizer();
        $normalizers[] = new CollaboratorNormalizer();
        $normalizers[] = new ProjectsPostResponse200Normalizer();
        return $normalizers;
    }
}