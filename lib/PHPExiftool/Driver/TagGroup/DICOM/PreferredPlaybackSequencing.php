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
class PreferredPlaybackSequencing extends AbstractTagGroup
{
    protected string $id = 'DICOM:PreferredPlaybackSequencing';

    protected string $name = 'PreferredPlaybackSequencing';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preferred Playback Sequencing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69376
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:PreferredPlaybackSequencing',
            'desc' => [
                'en' => 'Preferred Playback Sequencing',
            ],
        ],
    ];

    protected int $count = 0;
}
