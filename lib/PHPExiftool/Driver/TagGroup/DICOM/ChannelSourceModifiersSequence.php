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
class ChannelSourceModifiersSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:ChannelSourceModifiersSequence';

    protected string $name = 'ChannelSourceModifiersSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Channel Source Modifiers Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72705
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ChannelSourceModifiersSequence',
            'desc' => [
                'en' => 'Channel Source Modifiers Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
