<?php

namespace HbsResearch\Tilkee\API\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ProjectNormalizer();
        $normalizers[] = new ProjectCommonNormalizer();
        $normalizers[] = new ProjectDetailNormalizer();
        $normalizers[] = new ProjectListDetailNormalizer();
        $normalizers[] = new ResponseProjectListNormalizer();
        $normalizers[] = new ResponseProjectListContentsItemNormalizer();
        $normalizers[] = new ResponseUserListNormalizer();
        $normalizers[] = new ResponseProjectDuplicateNormalizer();
        $normalizers[] = new ResponseProjectArchiveNormalizer();
        $normalizers[] = new InputProjectNormalizer();
        $normalizers[] = new ProjectItemNormalizer();
        $normalizers[] = new ItemNormalizer();
        $normalizers[] = new ItemUpdateNormalizer();
        $normalizers[] = new ItemUpdateSharedAttributesNormalizer();
        $normalizers[] = new ItemWithOwnershipNormalizer();
        $normalizers[] = new ItemWithOwnershipprojectsItemNormalizer();
        $normalizers[] = new ResponseItemListNormalizer();
        $normalizers[] = new InputItemNormalizer();
        $normalizers[] = new ThemeNormalizer();
        $normalizers[] = new LeaderNormalizer();
        $normalizers[] = new TokenNormalizer();
        $normalizers[] = new TokenSignedDocsItemNormalizer();
        $normalizers[] = new InputTokenNormalizer();
        $normalizers[] = new InputTokenPersonsItemNormalizer();
        $normalizers[] = new ResponseCreateTokenNormalizer();
        $normalizers[] = new ResponseConnexionListNormalizer();
        $normalizers[] = new ResponseTokenListNormalizer();
        $normalizers[] = new DeviceNormalizer();
        $normalizers[] = new CollaboratorNormalizer();
        $normalizers[] = new UserNormalizer();
        $normalizers[] = new UserUtmItemNormalizer();
        $normalizers[] = new UserUtmItemUTMNormalizer();
        $normalizers[] = new UserProfileNormalizer();
        $normalizers[] = new CompanyNormalizer();
        $normalizers[] = new CompanyCustomBrandingNormalizer();
        $normalizers[] = new CompanyCustomBrandingOnboardingVideosUrlNormalizer();
        $normalizers[] = new UploadInformationNormalizer();
        $normalizers[] = new ConnexionNormalizer();
        $normalizers[] = new ProjectDataNormalizer();
        $normalizers[] = new WrapperTokenFromFilesPostBodyNormalizer();
        $normalizers[] = new WrapperTokenFromFilesPostBodyDocumentsItemNormalizer();
        $normalizers[] = new WrapperTokenFromFilesPostResponse200Normalizer();
        $normalizers[] = new ProjectsProjectIdDuplicatePostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdAddItemsPostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdAddItemsPostBodyItemsItemNormalizer();
        $normalizers[] = new ProjectsProjectIdRemoveItemsPostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdArchivePostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdTokensIdPutBodyNormalizer();

        return $normalizers;
    }
}
