<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneScale2Spline extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ToneScale2Spline';

    protected string $name = 'ToneScale2Spline';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Tone Scale 2 Spline',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108209
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ToneScale2Spline',
            'desc' => [
                'en' => 'Tone Scale 2 Spline',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
