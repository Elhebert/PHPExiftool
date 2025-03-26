<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaticAberrationCorrection extends AbstractTagGroup
{
    protected string $id = 'SubIFD:ChromaticAberrationCorrection';

    protected string $name = 'ChromaticAberrationCorrection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Chromatic Aberration Correction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82172
             * type : int16s
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:ChromaticAberrationCorrection',
            'desc' => [
                'en' => 'Chromatic Aberration Correction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
