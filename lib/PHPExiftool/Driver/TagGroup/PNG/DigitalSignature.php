<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalSignature extends AbstractTagGroup
{
    protected string $id = 'PNG:DigitalSignature';

    protected string $name = 'DigitalSignature';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::Main
             * line : 272538
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'PNG::Main.PNG:DigitalSignature',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
