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
class VignettingCorrParams extends AbstractTagGroup
{
    protected string $id = 'SubIFD:VignettingCorrParams';

    protected string $name = 'VignettingCorrParams';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vignetting Corr Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82169
             * type : int16s
             * writable : true
             * count : 17
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
    ];

    protected int $count = 17;

    protected int $flags = 2064;
}
