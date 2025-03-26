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
class PerceptualRenderingIntentGamut extends AbstractTagGroup
{
    protected string $id = 'ICC_Profile:PerceptualRenderingIntentGamut';

    protected string $name = 'PerceptualRenderingIntentGamut';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Perceptual Rendering Intent Gamut',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Main
             * line : 101871
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Main.ICC_Profile:PerceptualRenderingIntentGamut',
            'desc' => [
                'en' => 'Perceptual Rendering Intent Gamut',
            ],
        ],
    ];

    protected int $count = 0;
}
