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
class DisplaySetScrollingGroup extends AbstractTagGroup
{
    protected string $id = 'DICOM:DisplaySetScrollingGroup';

    protected string $name = 'DisplaySetScrollingGroup';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Display Set Scrolling Group',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74742
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DisplaySetScrollingGroup',
            'desc' => [
                'en' => 'Display Set Scrolling Group',
            ],
        ],
    ];

    protected int $count = 0;
}
