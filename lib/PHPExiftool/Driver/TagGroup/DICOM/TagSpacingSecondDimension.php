<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TagSpacingSecondDimension extends AbstractTagGroup
{
    protected string $id = 'DICOM:TagSpacingSecondDimension';

    protected string $name = 'TagSpacingSecondDimension';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Tag Spacing Second Dimension',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70300
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TagSpacingSecondDimension',
            'desc' => [
                'en' => 'Tag Spacing Second Dimension',
            ],
        ],
    ];

    protected int $count = 0;
}
