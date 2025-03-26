<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Scalado;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageHeight extends AbstractTagGroup
{
    protected string $id = 'Scalado:PreviewImageHeight';

    protected string $name = 'PreviewImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Scalado::Main
             * line : 336933
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Scalado::Main.Scalado:PreviewImageHeight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
