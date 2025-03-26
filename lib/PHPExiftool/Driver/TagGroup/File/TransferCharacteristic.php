<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TransferCharacteristic extends AbstractTagGroup
{
    protected string $id = 'File:TransferCharacteristic';

    protected string $name = 'TransferCharacteristic';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Transfer Characteristic',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DPX::Main
             * line : 78206
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DPX::Main.File:TransferCharacteristic',
            'desc' => [
                'en' => 'Transfer Characteristic',
            ],
        ],
    ];

    protected int $count = 0;
}
