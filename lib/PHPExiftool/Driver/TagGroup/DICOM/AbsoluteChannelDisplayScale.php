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
class AbsoluteChannelDisplayScale extends AbstractTagGroup
{
    protected string $id = 'DICOM:AbsoluteChannelDisplayScale';

    protected string $name = 'AbsoluteChannelDisplayScale';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Absolute Channel Display Scale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72777
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:AbsoluteChannelDisplayScale',
            'desc' => [
                'en' => 'Absolute Channel Display Scale',
            ],
        ],
    ];

    protected int $count = 0;
}
