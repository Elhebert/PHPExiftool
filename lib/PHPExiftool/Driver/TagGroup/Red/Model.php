<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{
    protected string $id = 'Red:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Model Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Red::Main
             * line : 233061
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::Main.Red:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
    ];

    protected int $count = 0;
}
