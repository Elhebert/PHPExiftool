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
class ResolutionMode extends AbstractTagGroup
{
    protected string $id = 'Sigma:ResolutionMode';

    protected string $name = 'ResolutionMode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Resolution Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 235999
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:ResolutionMode',
            'desc' => [
                'en' => 'Resolution Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 237416
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:ResolutionMode',
            'desc' => [
                'en' => 'Resolution Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
