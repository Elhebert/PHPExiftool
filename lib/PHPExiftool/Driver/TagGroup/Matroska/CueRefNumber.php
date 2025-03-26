<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CueRefNumber extends AbstractTagGroup
{
    protected string $id = 'Matroska:CueRefNumber';

    protected string $name = 'CueRefNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Cue Ref Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119559
             * type : unsigned
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Matroska::Main.Matroska:CueRefNumber',
            'desc' => [
                'en' => 'Cue Ref Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
