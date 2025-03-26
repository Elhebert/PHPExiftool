<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AbsPeakAudioFilePath extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:AbsPeakAudioFilePath';

    protected string $name = 'AbsPeakAudioFilePath';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Abs Peak Audio File Path',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291001
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:AbsPeakAudioFilePath',
            'desc' => [
                'en' => 'Abs Peak Audio File Path',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
