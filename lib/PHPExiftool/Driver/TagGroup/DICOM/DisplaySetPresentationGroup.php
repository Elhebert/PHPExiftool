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
class DisplaySetPresentationGroup extends AbstractTagGroup
{
    protected string $id = 'DICOM:DisplaySetPresentationGroup';

    protected string $name = 'DisplaySetPresentationGroup';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Display Set Presentation Group',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74730
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DisplaySetPresentationGroup',
            'desc' => [
                'en' => 'Display Set Presentation Group',
            ],
        ],
    ];

    protected int $count = 0;
}
