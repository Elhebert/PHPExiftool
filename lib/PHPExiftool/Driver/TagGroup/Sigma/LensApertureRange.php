<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensApertureRange extends AbstractTagGroup
{
    protected string $id = 'Sigma:LensApertureRange';

    protected string $name = 'LensApertureRange';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Aperture Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 237341
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:LensApertureRange',
            'desc' => [
                'en' => 'Lens Aperture Range',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 237377
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:LensApertureRange',
            'desc' => [
                'en' => 'Lens Aperture Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
