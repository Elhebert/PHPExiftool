<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageModulationExposureBias extends AbstractTagGroup
{
    protected string $id = 'Lytro:ImageModulationExposureBias';

    protected string $name = 'ImageModulationExposureBias';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Modulation Exposure Bias',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Lytro::Main
             * line : 110878
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Lytro::Main.Lytro:ImageModulationExposureBias',
            'desc' => [
                'en' => 'Image Modulation Exposure Bias',
            ],
        ],
    ];

    protected int $count = 0;
}
