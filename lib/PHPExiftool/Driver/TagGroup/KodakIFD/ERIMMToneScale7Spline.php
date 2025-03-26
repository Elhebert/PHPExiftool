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
class ERIMMToneScale7Spline extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ERIMMToneScale7Spline';

    protected string $name = 'ERIMMToneScale7Spline';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ERIMM Tone Scale 7 Spline',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108254
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ERIMMToneScale7Spline',
            'desc' => [
                'en' => 'ERIMM Tone Scale 7 Spline',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
