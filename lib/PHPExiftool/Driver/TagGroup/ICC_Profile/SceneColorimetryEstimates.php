<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_Profile;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SceneColorimetryEstimates extends AbstractTagGroup
{
    protected string $id = 'ICC_Profile:SceneColorimetryEstimates';

    protected string $name = 'SceneColorimetryEstimates';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scene Colorimetry Estimates',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Main
             * line : 101896
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Main.ICC_Profile:SceneColorimetryEstimates',
            'desc' => [
                'en' => 'Scene Colorimetry Estimates',
            ],
        ],
    ];

    protected int $count = 0;
}
