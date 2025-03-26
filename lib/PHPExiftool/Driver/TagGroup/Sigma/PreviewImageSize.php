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
class PreviewImageSize extends AbstractTagGroup
{
    protected string $id = 'Sigma:PreviewImageSize';

    protected string $name = 'PreviewImageSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 236123
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:PreviewImageSize',
            'desc' => [
                'en' => 'Preview Image Size',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 236135
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:PreviewImageSize',
            'desc' => [
                'en' => 'Preview Image Size',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
