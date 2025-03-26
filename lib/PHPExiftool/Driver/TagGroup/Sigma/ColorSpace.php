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
class ColorSpace extends AbstractTagGroup
{
    protected string $id = 'Sigma:ColorSpace';

    protected string $name = 'ColorSpace';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 337181
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:ColorSpace',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
