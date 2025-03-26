<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinAperture extends AbstractTagGroup
{
    protected string $id = 'Kodak:MinAperture';

    protected string $name = 'MinAperture';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Min Aperture',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109485
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:MinAperture',
            'desc' => [
                'en' => 'Min Aperture',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
