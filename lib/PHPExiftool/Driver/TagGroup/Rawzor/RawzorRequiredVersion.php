<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Rawzor;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawzorRequiredVersion extends AbstractTagGroup
{
    protected string $id = 'Rawzor:RawzorRequiredVersion';

    protected string $name = 'RawzorRequiredVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Rawzor::Main
             * line : 329620
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Rawzor::Main.Rawzor:RawzorRequiredVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
